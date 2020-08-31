@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Level Role Config
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($levelRoleConfig, ['route' => ['levelRoleConfigs.update', $levelRoleConfig->id], 'method' => 'patch']) !!}

                        @include('level_role_configs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection