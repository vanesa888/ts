<div class="card">
                    @foreach ($pertanyaanmhs as $pertanyaanmhs_baru) 
                    <div id="{{'headingOne1' . $pertanyaanmhs_baru->id}}" class="card-header">
                          <h5 class="mb-1">
                                <button type="button" data-toggle="collapse" data-target="{{'#collapseOne2'. $pertanyaanmhs_baru->id}}" aria-expanded="true" aria-controls="{{'collapseOne2'. $pertanyaanmhs_baru->id}}" class="btn btn-link">
                                  {{$pertanyaanmhs_baru->kategorimahasiswa->ketkodeinsmhs}}
                                </button>
                          </h5>
                        </div>

                        <div id="{{'collapseOne2'. $pertanyaanmhs_baru->id}}" aria-labelledby="{{'headingOne'. $pertanyaanmhs_baru->id}}" data-parent="#accordionExample" class="collapse">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th style="width: 1%;">
                                                <center>#</center>
                                                {{$loop->iteration}}
                                            </th>
                                            <th>
                                                <center>Pertanyaan</center>
                                                {{$pertanyaanmhs_baru->pertanyaanmhs}}
                                            </th>
                                            <th>
                                                <center>Jawaban</center>
                                            </th>
                                            <th>
                                                <center>Aksi</center>
                                            </th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>