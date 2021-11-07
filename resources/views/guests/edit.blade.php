<!--MODAL-->
<div class="modal fade" id="guest-modal-ed-form" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Actualizar dados do convidado</h5>
                <button class="close" type="button" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <!--Grid layout para modal-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <form  method="post" id="guest-form-ed">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="hidden" name="guest_id" id="guest_id" value="">
                                        <label for="name">Nome do convidado</label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Nome do convidado">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-7">
                                        <label for="place">Mesa</label>
                                        <input type="text" name="place" id="place" class="form-control" placeholder="Mesa">
                                    </div>
                                    <div class="col-md-auto">
                                        <label for="per_num">Número de pessoas</label>
                                        <input type="number" name="per_num" id="per_num" class="form-control" min="0" max="6">
                                    </div>
                                    <div class="col-md-auto">
                                        <input type="hidden" name="event_id" id="event_id" value="">
                                    </div>
                                </div>

                                <div class="form-group row modal-footer">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-primary" name="btn_reg" id="btn_reg">Actualizar</button>
                                        </div>
                                        <div class="col-sm-6">
                                            <button class="btn btn-danger" type="button" data-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--FIM-->