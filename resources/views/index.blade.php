@extends('layouts.app')
@section('title', 'если вы долго печатали на другой раскладке клавиатуры, просто вставьте краказябры сюда и получите текст на нужном языке')

@section('sidebar')

    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="is-1 title">KeyTranspire</h1>
                <h2 class="subtitle is-3">
                    Здесь вы сможете перевести текст если забыли поменять раскладку клавиатуры. Просто выберите из
                    которой раскладки и на какую вы хотите исправить текст и нажмите кнопку перевести
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
                            <select v-model="form.from">
                                <option disabled value="">Выберите язык с которого хотите перевести</option>
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
                            <select v-model="form.to">
                                <option disabled value="">Выберите язык на которий хотите перевести</option>
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
                              v-model="form.text"
                              placeholder="Введите сюда текст который вы хотите перевести"
                              rows="10">
                    </textarea>
                    </div>
                    <div class="column is-6">
                        <div class="box" v-text="text" style="min-height:262px"></div>
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-12">
                        <a class="button is-medium" v-on:click="translite()">Перевести</a>
                    </div>
                </div>
            </div>
        </div>
    </translate-form>
@endsection