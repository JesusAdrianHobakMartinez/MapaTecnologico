
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4>Mapa de la escuela</h4>
						</div>

						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
					</div>
				</div>

				<div class="card-body mx-auto">
                    <img src="{{asset('img/'.$img->nombrearchivo)}}" alt="Mapa de la escuela">
                </div>
                <div class="float-left">
				    <h5>Buscar por Edificio:</h5>
                    <table class="table table-bordered table-sm ">

                        <tr>
                            <th><a class="btn btn-secondary" wire:click="$emit('refreshComponent')" href=""></i>Edificios:</a></th>
                            @foreach($edificios as $edificio)
                            <td ><button class=" btn-link" wire:click="showEdificio({{$edificio->id}})">{{$edificio->nombreEdificio}}</button></td>
                            @endforeach
                        </tr>



                    </table>
				</div>
			</div>
		</div>
	</div>
</div>

