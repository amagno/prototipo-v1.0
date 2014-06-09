@extends('master')


@section('content')

<div class="row" ng-app="sendModule">
    <div class="col-sm-6 col-sm-offset-3" ng-controller="TestController">
        <div class="panel panel-primary">
            <div class="panel-heading">Teste</div>
            <div class="panel-body">
                <form id="formTest">
                    <input type="text" name="nome" ng-model="data.nome"/>
                    <input type="text" name="sobrenome" ng-model="data.sobrenome"/>

                    <input type="submit" value="Enviar" ng-click="sendData('/send')"/>
                </form>



                <div class="bg-info">{{ ok }}</div>
            </div>
        </div>
    </div>
</div>


@stop