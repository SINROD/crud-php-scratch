<div id="alerta" class="alerta">
    <div class="card column is-half">
        <div class="card-content">
            <div class="content">

                <div class="columns">
                    <div class="column is-6">
                        <p class="title">
                            Agregar
                        </p>
                    </div>
                    <div class="column is-6 has-text-right">
                        <a href="javascript:CerrarAlerta();" class="title has-text-danger">
                            x
                        </a>
                    </div>
                </div>

                <div id="form-confirm-refresh">
                    <form class="form" method="post" id="form-objeto-agregar">
                        <div class="field mb-5">
                            <div class="control">
                                <input class="input" id="objeto" type="text" name="objeto" placeholder="Nombre del objeto...">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <a href="javascript: Agregar();" class="button is-info">Agregar objeto!!</a>
                            </div>

                        </div>
                    </form>

                    <div id="resp">
                        <p class="title" id="resp_text"></p>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
