@extends('layout')
@section('title', 'Create New Post')
@section('content')
  <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet"
    type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_style.min.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js">
  </script>
  <div id="wysiwyg"></div>
  <div class="fr-view" id="show">
  </div>
  <script>
    var callback = function() {
      var editor = this
      console.log(editor.codeBeautifier.run(editor.html.get()))
      document.getElementById('show').innerHTML = editor.codeBeautifier.run(editor.html.get());
      // document.getElementById().removeClass('prettyprinted');
    }
    var editor = new FroalaEditor('#wysiwyg', {
      events: {
        initialized: callback,
        contentChanged: callback
      }
    });

    // document.getElementById('#show').innerHTML = 
  </script>

@endsection
