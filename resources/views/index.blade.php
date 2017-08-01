<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Key translate</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.0/css/bulma.min.css">
</head>
<body>
<section class="section" id="app">
    <translate-form inline-template>
        <div class="container">
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
                    <div class="box" v-text="text"></div>
                </div>
            </div>
            <div class="columns">
                <div class="column is-12">
                    <a class="button is-medium" v-on:click="translite()">Translate</a>
                </div>
            </div>
        </div>
    </translate-form>
</section>
<script src="/js/web.js"></script>
</body>
</html>