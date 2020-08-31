@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Static Content
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($staticContent, ['route' => ['staticContents.update', $staticContent->id], 'method' => 'patch']) !!}

                        @include('static_contents.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection