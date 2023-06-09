<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4>
							Derpartamentos TECNM </h4>
						</div>

						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar">
						</div>
					</div>
				</div>
			</div>
            <div class="row justify-content-center mt-12">
                @foreach($departamentos as $row)
                    <div class="col-lg-12">
                        <div class="card" style="margin-bottom: 20px; height: auto;">
                            <div class="card-body">
                                <button class="btn btn-link mx-auto" wire:click="showMap({{$row->idedificio_fk}})">
                                    <h6 class="card-title">{{$row->nombreDepartamento}}</h6>
                                </button>
                                    <p>{{$row->encargado}}</p>
                                    <p>{{$row->puestoTrabajo}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-4 p-4 w-full">
                    {{ $departamentos->links() }}
            </div>
		</div>
	</div>
</div>

