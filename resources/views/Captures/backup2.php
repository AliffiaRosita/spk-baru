<div class="col-lg-3" style="margin-top: -195px">
        <div class="card">
            <div class="card-header bg-white">
                <strong class="card-title">Kriteria</strong>
                <a href="{{route('criteria.create')}}" style="float:right;" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Tambah Kriteria"><i class="fa fa-plus"></i> </a>
            </div>
            <div class="table-stats order-table ov-h">
                <table class="table">
                    <thead > 
                        <tr>
                            <th class="serial" >#</th>
                            <th>Kriteria</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($isi_kriteria as $kriteria)
                        <tr>
                            <td class="serial">{{$kriteria->id}}</td>
                            <td height="50px"> <span class="name">{{$kriteria->nama_kriteria}} </span></td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
                            <tr>
                                <td class="serial">1.</td>
                                <td class="avatar">
                                    <div class="round-img">
                                        <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>
                                    </div>
                                </td>
                                <td> #5469 </td>
                                <td>  <span class="name">Louis Stanley</span> </td>
                                <td> <span class="product">iMax</span> </td>
                                <td><span class="count">231</span></td>
                            </tr>
                            <tr>
                                <td class="serial">1.</td>
                                <td class="avatar">
                                    <div class="round-img">
                                        <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>
                                    </div>
                                </td>
                                <td> #5469 </td>
                                <td>  <span class="name">Louis Stanley</span> </td>
                                <td> <span class="product">iMax</span> </td>
                                <td><span class="count">231</span></td>
                            </tr>
                            <tr>
                                <td class="serial">1.</td>
                                <td class="avatar">
                                    <div class="round-img">
                                        <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>
                                    </div>
                                </td>
                                <td> #5469 </td>
                                <td>  <span class="name">Louis Stanley</span> </td>
                                <td> <span class="product">iMax</span> </td>
                                <td><span class="count">231</span></td>
                            </tr>
                            <tr>
                                <td class="serial">1.</td>
                                <td class="avatar">
                                    <div class="round-img">
                                        <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>
                                    </div>
                                </td>
                                <td> #5469 </td>
                                <td>  <span class="name">Louis Stanley</span> </td>
                                <td> <span class="product">iMax</span> </td>
                                <td><span class="count">231</span></td>
                            </tr>
                            <tr>
                                <td class="serial">1.</td>
                                <td class="avatar">
                                    <div class="round-img">
                                        <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>
                                    </div>
                                </td>
                                <td> #5469 </td>
                                <td>  <span class="name">Louis Stanley</span> </td>
                                <td> <span class="product">iMax</span> </td>
                                <td><span class="count">231</span></td>
                            </tr>
                            <tr>
                                <td class="serial">1.</td>
                                <td class="avatar">
                                    <div class="round-img">
                                        <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>
                                    </div>
                                </td>
                                <td> #5469 </td>
                                <td>  <span class="name">Louis Stanley</span> </td>
                                <td> <span class="product">iMax</span> </td>
                                <td><span class="count">231</span></td>
                            </tr>
