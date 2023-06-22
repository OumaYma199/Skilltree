<?php

namespace App\Http\Controllers;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    //La page/vue skilltree.blade.php

    public function skilltree()
    {
        $skills = Skill::with('children')->whereNull('parent_id')->get();

        return view('home.skilltree', compact('skills'));
    }
    public function create(Request $request)
{
    $validatedData = $request->validate([
        'competences.*.name' => 'required',
        'competences.*.description' => 'max:255',
        'job_id' => 'required|exists:jobs,id',
    ]);

    // Enregistrement de la relation compétence-métier dans la base de données
    $job = Job::findOrFail($validatedData['job_id']);
    foreach ($validatedData['competences'] as $competenceData) {
        $competence = new Skill();
        $competence->name = $competenceData['name'];
        $competence->description = $competenceData['description'];
        $competence->save();

        // Associer la compétence au métier
        $job->skills()->attach($competence);
    }

    // Redirection ou autre traitement après l'enregistrement

    // Redirection vers une autre page
    return redirect()->route('competences.index');
}

}
