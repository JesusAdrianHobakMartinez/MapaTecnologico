<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4>
							Clientes </h4>
						</div>

						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar Departamento">
						</div>

						<button wire:click="create()" class=" btn btn-info">
						  Agregar nuevo departamento
						</button>
					</div>
				</div>

				<div class="card-body">
                    @if($updateMode)
                        @include('livewire.menuadmin.update')
                    @else
                        @if($createMode)
                            @include('livewire.menuadmin.create')
                        @endif
                    @endif

                </div>
			</div>
            <div class="row justify-content-center mt-12">
                @foreach($departamentos as $row)
                    <div class="col-lg-3">
                        <div class="card" style="margin-bottom: 20px; height: auto;">
                            <div class="card-body">
                                <a  href="{{route('menuadmin.show', $row->id)}}">
                                    <h6 class="card-title">{{$row->nombreDepartamento}}</h6>
                                </a>
                                    <p>{{$row->encargado}}</p>
                                    <p>{{$row->puestoTrabajo}}</p>
                                    <a class="btn btn-secondary" wire:click="edit({{$row->id}})"></i>Editar</a>
                                    <a class="btn btn-info" onclick="confirm('Confirma eliminar departamento: {{ucwords(strtolower($row->nombreDepartamento))}}?')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"> Eliminar </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-4 p-4 w-48">
                    {{ $departamentos->links() }}
            </div>
		</div>
	</div>
</div>
</div>
