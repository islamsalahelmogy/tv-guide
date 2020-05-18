@extends('layouts.master')
@section('title') edit program @endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-7 offset-md-2">
            <br><br><br>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Program</h3>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => ['programs.update',$program->id],'method' => 'PATCH','files' => true])
                    !!}
                    <div class="col-md-offset-3">

                        @if($program->image_url)
                        <img width="100" height="90" src="{{ asset('assets/images/' . $program->image_url) }}"
                            alt="product image">
                        <br><br>
                        @endif

                        <div class="input-group mb-3">
                            <input name="image_url" type="file" class="form-control" placeholder="Image">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-image"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-offset-3 mb-3">
                            <div class="input-group mb-3">
                                <input name="title" type="text" class="form-control" required placeholder="Title"
                                    value="{{ $program->title }}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-signature"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-offset-3 mb-3">
                            <textarea class="form-control" name="descripion">
                                   {{ $program->descripion }}
                            </textarea>
                        </div>

                        <div class="col-md-offset-3 mb-3">
                            <div class="input-group mb-3">
                                <input name="season" type="text" required class="form-control" required
                                    placeholder="Season" value="{{ $program->season }}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-signature"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-offset-3 mb-3">
                            <div class="input-group mb-3">
                                <input name="promo_link" type="text" class="form-control" required
                                    placeholder="Promo Link" value="{{$program->promo_link }}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-signature"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-offset-3 mb-3">
                            <div class="input-group mb-3">
                                <label for="creation_year" class="form-control"> Year Creation</label>
                                <input name="creation_year" type="date" class="form-control" required
                                    value="{{$program->creation_year}}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-signature"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-offset-3 mb-3">
                            <div class="input-group mb-3">
                                <label for="valid_from" class="form-control"> Valid From</label>
                                <input name="valid_from" type="date" class="form-control" required
                                    placeholder="valid from" value="{{$program->valid_from}}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-signature"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-offset-3 mb-3">
                            <div class="input-group mb-3">
                                <label for="valid_to" class="form-control"> Valid To</label>
                                <input name="valid_to" type="date" class="form-control" required placeholder="valid to"
                                    value="{{$program->valid_to}}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-signature"></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-offset-3">
                            <select name="repeeted" class="form-control mb-3" required value="{{$program->repeeted}}">
                                <option disabled selected hidden value="">Repeeted Or Non</option>

                                <option value="repeeted">repeeted</option>
                                <option value="nonrepeeted">nonrepeeted</option>

                            </select>
                        </div>
                        <div class="col-md-offset-3">
                            <select name="sequence" class="form-control mb-3" required value="{{$program->sequence}}">
                                <option disabled selected hidden value="">Sequence</option>

                                <option value="dayly">dayly</option>
                                <option value="weekly">weekly</option>
                                <option value="monthly">monthly</option>
                                <option value="non">non</option>

                            </select>
                        </div>



                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection