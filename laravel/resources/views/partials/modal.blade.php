    <!-- Modal -->
  <div class="modal fade" id="editar{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>{{-- cierra body --}}
        <div class="modal-body">
            <form method="POST" action="/recuerdo/{{ $item->id }}/confirm">
                @csrf 
                  <div class="mb-3">
                    <label class="form-label">Titulo:</label>
                    <input type="text" name="txtTitulo" class="form-control" value="{ $item->titulo }">
                    <p class="text-danger"> {{$errors->first('txtTitulo')}} </p> <!-- invocar la variable echo -->
                  </div>
      
                  <div class="mb-3">
                    <label class="form-label">Recuerdo:</label>
                    <input type="text" name="txtRecuerdo" class="form-control" value="{ $item->recuerdo }">
                    <p class="text-danger"> {{$errors->first('txtRecuerdo')}} </p>
                  </div>      
        </div>
        <div class="modal-footer">
            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-primary">Editar recuerdo</button>
            </form>
            </div>
        </div>{{-- cierra footer --}}
      </div>
    </div>
  </div>

  <!-- Modal de Confirmación de Eliminación -->
<div class="modal fade" id="eliminarRecuerdoModal{{ $item->id }}" tabindex="-1" aria-labelledby="eliminarRecuerdoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="eliminarRecuerdoModalLabel">Confirmar Eliminación</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <p>¿Estás seguro de que deseas eliminar este recuerdo?</p>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <form method="POST" action="{{ route('recuerdo.destroy', $item->id) }}">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Eliminar</button>
              </form>
          </div>
      </div>
  </div>
</div>