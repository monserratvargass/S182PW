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