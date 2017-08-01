@extends('layouts.app')
@section('title', 'Page for translite keboard')

@section('sidebar')

    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="is-1 title">Key transpire</h1>
                <h2 class="subtitle is-3">
                    Тут ви зможете перекласти текст якщо забули поміняти розкладку тексту просто виберіть з якої
                    розкладки і на яку ви хочете поміняти
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
                        <div class="select is-medium" :class="form.errors.has('from')?'is-danger':''">
                            <select v-model="form.from">
                                <option disabled value="">Select from language</option>
                                @foreach(trans('web.langList') as $key=>$lang)
                                    <option value="{{$key}}">{{$lang}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="select is-medium" :class="form.errors.has('to')?'is-danger':''">
                            <select v-model="form.to">
                                <option disabled value="">Select to language</option>
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
                              v-model="form.text"
                              placeholder="10 lines of textarea"
                              rows="10">
                    </textarea>
                    </div>
                    <div class="column is-6">
                        <div class="box" v-text="text" style="min-height:262px"></div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-12">
                        <a class="button is-medium" v-on:click="translite()">Translate</a>
                    </div>
                </div>
            </div>
        </div>
    </translate-form>
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h3 class="title">
                    SEO title
                </h3>
                <p class="subtitle">
                    SEO text
                </p>
            </div>
        </div>
    </section>
@endsection