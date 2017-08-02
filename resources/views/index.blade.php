@extends('layouts.app')
@section('sidebar')

    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="is-1 title">
                    {{trans('web.hero.title')}}
                </h1>
                <h2 class="subtitle is-3">
                    {{trans('web.hero.text')}}
                </h2>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <translate-form inline-template>
        <div class="container">
            <div class="box">
                <div class="columns">
                    <div class="column is-6">
                        <div class="select is-medium"
                             :class="form.errors.has('from')?'is-danger':''"
                             v-on:click="form.errors.clear()">
                            <select v-model="form.from" v-on:change="translateAuto()">
                                <option disabled value="">{{trans('web.trans.from')}}</option>
                                @foreach(trans('web.langList') as $key=>$lang)
                                    <option value="{{$key}}">{{$lang}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="select is-medium"
                             :class="form.errors.has('to')?'is-danger':''"
                             v-on:click="form.errors.clear()">
                            <select v-model="form.to" v-on:change="translateAuto()">
                                <option disabled value="">{{trans('web.trans.to')}}</option>
                                @foreach(trans('web.langList') as $key=>$lang)
                                    <option value="{{$key}}">{{$lang}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-6">
                    <textarea class="textarea"
                              :class="form.errors.has('text')?'is-danger':''"
                              v-on:click="form.errors.clear()"
                              v-on:input="translateAuto()"
                              v-model="form.text"
                              placeholder="{{trans('web.trans.text')}}"
                              rows="10">
                    </textarea>
                    </div>
                    <div class="column is-6">
                        <div class="box" v-text="text" style="min-height:262px"></div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-12">
                        <a class="button is-medium" v-on:click="translate()">{{trans('web.trans.button')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </translate-form>
@endsection