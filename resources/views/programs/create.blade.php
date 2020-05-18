@extends('layouts.master')
@section('title') create channel @endsection


@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-7 offset-md-2">
            <br><br><br>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add Program</h3>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'programs.store','files' => true]) !!}


                    <div class="col-md-offset-3 mb-3">
                        <div class="input-group mb-3">
                            <input name="title" type="text" class="form-control" required placeholder="Title" required
                                value="{{ old('title') }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-signature"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-offset-3 mb-3">
                        <div class="input-group mb-3">
                            <input name="season" type="text" required class="form-control" required placeholder="Season"
                                value="{{ old('season') }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-signature"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-offset-3 mb-3">
                        <div class="input-group mb-3">
                            <input name="promo_link" type="text" class="form-control" required placeholder="Promo Link"
                                value="{{ old('promo_link') }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-signature"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-offset-3">
                        <div class="input-group mb-3">
                            <input name="image_url" type="file" class="form-control" placeholder="Image">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-image"></span>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-offset-3 mb-3">
                            <label for="descripion" class="form-control"> Description</label>
                            <textarea class="form-control" required name="descripion"
                                placeholder="Enter Channel Description">

                            </textarea>
                        </div>

                        <div class="col-md-offset-3 mb-3">
                            <div class="input-group mb-3">
                                <label for="creation_year" class="form-control"> Year Creation</label>
                                <input name="creation_year" type="date" class="form-control" required placeholder="Year"
                                    value="{{ old('creation_year') }}">
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
                                    placeholder="valid from" value="{{ old('valid_from') }}">
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
                                    value="{{ old('valid_to') }}">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-signature"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-offset-3">
                            <select name="repeeted" class="form-control mb-3" required>
                                <option disabled selected hidden value="">Repeeted Or Non</option>

                                <option value="repeeted">repeeted</option>
                                <option value="nonrepeeted">nonrepeeted</option>

                            </select>
                        </div>
                        <div class="col-md-offset-3">
                            <select name="sequence" class="form-control mb-3" required>
                                <option disabled selected hidden value="">Sequence</option>

                                <option value="dayly">dayly</option>
                                <option value="weekly">weekly</option>
                                <option value="monthly">monthly</option>
                                <option value="non">non</option>

                            </select>
                        </div>



                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection