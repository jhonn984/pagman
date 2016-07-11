
<div id="bordered-table">
    <h5 class="header">Lista de centros de formacion </h5>


    <div class="row">
        <!--<div class="col s12 m4 l3">
            <p>Add <code class="  language-markup">class="bordered"</code> to the table tag for a bordered table</p>
        </div>-->
        <div class="col s12 m8 l9">
            <table class="bordered">
                <thead>
                    <tr>

                        <th>Codigo centro</th>
                        <th>Nombre centro </th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($centros as $centro) {
                        ?>
                        <tr>

                            <td><?php echo $centro['cen_id'] ?></td>
                            <td><?php echo $centro['cen_nombre'] ?></td>
                            <td>
                                <a class="modal-trigger ver-detalle2"
                                   href="#modalDetalle2" data-url="<?php echo crearUrl('localizacion', 'centro', 'detalle', array('noVista' => 'noVista', 'id' => $centro['cen_id'])) ?>">
                                    <i class="small mdi-action-visibility"></i>
                                </a>
                            </td>
                            <td>
                                <a class="modal-trigger Editar2" 
                                   href="#modalUpdate2" data-url="<?php echo crearUrl('localizacion', 'centro', 'editar', array('noVista' => 'noVista', 'id' => $centro['cen_id'])) ?>">
                                    <i class="btn-floating small  mdi-content-create teal"></i>
                                </a>

                            </td>

                            <td>
                                <a class=" btn-floating waves-effect waves-light modal-eliminar red
                                   darken-4 eliminar" data-cen_id="<?php echo $centro['cen_id'] ?>"  data-url="<?php echo crearUrl('localizacion', 'centro', 'postEliminar', array('noVista' => 'noVista', 'id' => $centro['cen_id'])) ?>">
                                    <i class="mdi-action-delete small red "></i>
                                </a>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div id="modalDetalle2" class="modal modal-fixed-footer">
                <div class="modal-content"></div>
                <div class="modal-footer">
                    <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">cerrar</a>                 
                </div>
            </div>
        </div>
        <div id="modalUpdate2" class="modal modal-fixed-footer">
            <div class="modal-content"></div>
            <div class="modal-footer">
                <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">cerrar</a>           
            </div>
        </div>
        <div id="modalEliminar" class="modal modal-fixed-footer">
            <div class="modal-content"></div>
            <div class="modal-footer">
                <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">cerrar</a>           
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('.modal-trigger').leanModal({
            dismissible: true, // Modal can be dismissed by clicking outside of the modal
            opacity: .5, // Opacity of modal background
            in_duration: 300, // Transition in duration
            out_duration: 200, // Transition out duration
            ready: function () {
                //alert('Ready'); 
            }, // Callback for Modal open
            complete: function () {
                //alert('Closed'); 
            } // Callback for Modal close
        });
    </script>
