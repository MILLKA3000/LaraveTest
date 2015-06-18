<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3>Вмісні: </h3>
        @foreach ($product->indigrients as $indi)
        <a href="/dashboard/indi/{{$indi->indigrientname->id}}/show">{{$indi->indigrientname->name}}  - {{$indi->weight}}гр</a>
        <a href="#!inline" style="font-weight: bold;" class="text-danger">X</a>
        <br/>
        @endforeach
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3>Доступні: </h3>
        <div class="panel-group" id="accordion">
            @foreach ($category as $indi)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#{{$indi->id}}">
                            {{$indi->name}}
                        </a>
                    </h4>
                </div>
                <div id="{{$indi->id}}" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            @foreach ($indi->getIndigrients as $in)
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <span class="btn btn-default addattr" idn="{{$in->id}}" style="margin: 5px;">{{$in->name}}</span><br/>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>


<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{$product->name}} Кількість грамм .</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-md-4 control-label">Введіть кількість грамм</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="weight" name="weight" value="">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <input type="hidden" class="form-control" id="pr_id" name="pr_id" value="{{$product->id}}">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрити</button>
                <button type="button" class="btn btn-primary sendweight">Зберегти</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
