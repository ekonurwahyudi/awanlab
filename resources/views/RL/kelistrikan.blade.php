@include('RL/header')
        <!-- page-title -->
        <div class="">
            <div class="">
                <div class="container">
                    <br/>
                    <br/>
                    <div class="row align-items-center text-center">
                        <div class="col-lg-12">
                            <div class="">
                                <h3 class="title">{{__('lang.detaillistrik')}}</h3>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a href="/">{{__('lang.Beranda')}}</a>
                                </span>
                                <span>{{__('lang.kelistrikan')}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">

        <div class="ttm-row sidebar ttm-sidebar-right clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12 content-area">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-xl-8">
                                <div class="row align-items-left">
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="d-flex align-items-right">
                                            <!-- <label class="mr-3 mb-0 d-none d-md-block">Lokasi:</label> -->
                                            <select class="form-control" id="kt_datatable_search_lokasi">
                                                <option value="">{{__('lang.lokasi')}}</option>
                                                <option value="1">Jakarta</option>
                                                <option value="2">Medan</option>
                                                <option value="3">Surabaya</option>
                                                <option value="4">Makassar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search ....." id="kt_datatable_search_query" />
                                            
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-2 my-2 my-md-0">
                                        <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
              
                        <br>
                        <table class="datatable-bordered datatable-head-custom" id="kt_datatable">
                            <thead>
                                <tr>
                                    <th>Lokasi</th>
                                    <th>{{__('lang.kategori')}}</th>
                                    <th>{{__('lang.instrumen')}}</th>
                                    <th>{{__('lang.tabelfrekuensi')}}</th>
                                    <th>{{__('lang.rentang')}}</th>
                                    <th>{{__('lang.ketidakpastian')}}</th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($ruanglingkups as $ruanglingkup)
                                <tr>
                                    <td class="text-right">{{$ruanglingkup->ruanglingkup_lokasi}}</td>
                                    <td>{{$ruanglingkup->ruanglingkup_kelompokukur}}</td>
                                    <td>{{$ruanglingkup->ruanglingkup_instrument}}</td>
                                    <td ><textarea style="border-style: none; background-color: white;" disabled="disabled" >{{$ruanglingkup->ruanglingkup_frekuensi}}</textarea></td>
                                    <td><textarea style="border-style: none; background-color: white; " disabled="disabled" >{{$ruanglingkup->ruanglingkup_rentangukur}}</textarea></td>
                                    <td><textarea style="border-style: none; background-color: white; " disabled="disabled">{{$ruanglingkup->ruanglingkup_ketidakpastian}}</textarea></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    
                    

                    
                </div><!-- row end -->
                
            </div>
        </div>

      
    </div><!--site-main end-->
@include('RL/footer')