@extends('layouts.app')
@section('content')
<!-- Button trigger modal -->
<button
type="button"
class="btn btn-primary"
data-bs-toggle="modal"
data-bs-target="#exampleModal">
  Launch demo modal
</button>

<div class="modal" tabindex="-1" id="exampleModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
          Asignar Serial
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div
          v-show="notFound"
          class="alert alert-danger">
          Serial o MAC no pertenece a ningún dispositivo
        </div>
        <form
          action="/asignar"
          method="POST"
          @submit.prevent="asignar"
          >
          @csrf
          <div class="form-group">
            <label for="#" style="font-weight: 600; margin-bottom: 10px;">
              Serial o MAC
            </label>
            <input
              class="form-control mb-2"
              type="text"
              v-model="mac"
            >
            <input type="hidden" name="user_id" value="1">
          </div>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
@endsection