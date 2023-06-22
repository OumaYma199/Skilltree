@extends('base')

@section('title','SkillTree')

@section('content')
<div class="skill-tree">
    <ul>
        @foreach ($skills as $skill)
        <li>
            <div class="skill" data-skill-id="{{ $skill->id }}">
                <a href="#" data-toggle="modal" data-target="#ModalInfos" data-skill-id="{{ $skill->id }}">
                    <span class="skill-name"  title="{{ $skill->description }}">{{ $skill->name }}</span>
                </a>
            </div>
            @include('modal.modal')
            @if ($skill->children->count() > 0)
            <ul>
                @foreach ($skill->children as $child)
                <li>
                    <div class="skill-child" data-skill-id="{{ $child->id }}">
                        <a href="#"  data-toggle="modal" data-target="#ModalInfos" data-skill-id="{{ $skill->id }}">
                            <span  title="{{ $child->description }}" class="skill-name">{{ $child->name }}</span>
                        </a>
                    </div>
                    @if ($child->children->count() > 0)
                    <ul>
                        @foreach ($child->children as $grandchild)
                        <li>
                            <div class="skill-grandchild" data-skill-id="{{ $grandchild->id }}">
                                <a href="#" data-toggle="modal" data-target="#ModalInfos">
                                    <span title="{{ $grandchild->description }}" class="skill-name">{{ $grandchild->name }}</span>
                                </a>
                            </div>
                            @if ($grandchild->children->count() > 0)
                            <ul>
                                @foreach ($grandchild->children as $subchild)
                                <li>
                                    <div class="skill-subchild" data-skill-id="{{ $subchild->id }}">
                                        <a href="#"data-toggle="modal" data-target="#ModalInfos">
                                        <span  title="{{ $subchild->description }}" class="skill-name">{{ $subchild->name }}</span>
                                        </a>
                                    </div>
                                    @if ($subchild->children->count() > 0)
                                    <ul>
                                        @foreach ($subchild->children as $subsubchild)
                                        <li>
                                            <div class="skill-subsubchild" data-skill-id="{{ $subsubchild->id }}">
                                                <a href="#" data-toggle="modal" data-target="#ModalInfos">                                                <span  title="{{ $subsubchild->description }}" class="skill-name">{{ $subsubchild->name }}</span>
                                                    <span  title="{{ $subsubchild->description }}" class="skill-name">{{ $subsubchild->name }}</span>
                                                </a>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach
            </ul>
            @endif
        </li>
        @endforeach
    </ul>

    </div>
@endsection
