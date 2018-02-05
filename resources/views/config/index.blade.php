@extends('layouts.admin')

@section('contenido')
          <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Configuración</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-12 col-sm-12">
                  <button class="btn btn-info" id="leerestado">Leer Datos</button>
                  <div class="row">
                    <div class="col-xl-4 col-sm-4">
                    <table class="table table-striped table-condensed table-bordered table-hover table-responsive">
                      <thead>
                        <tr>
                          <th>Estados</th>
                          <th>Config</th>
                        </tr>
                      </thead>
                      <tbody id="estadosInfo">
                        
                      </tbody>
                    </table>
                  </div>
                  <div class="col-xl-4 col-sm-4">
                    <table class="table table-striped table-bordered table-hover table-responsive">
                      <thead>
                        <tr>
                          <th>Sexos</th>
                          <th>Config</th>
                        </tr>
                      </thead>
                      <tbody id="sexosInfo">
                        
                      </tbody>
                    </table>
                  </div>
                  <div class="col-xl-4 col-sm-4">
                    <table class="table table-striped table-bordered table-hover table-responsive">
                      <thead>
                        <tr>
                          <th>Ocupaciones</th>
                          <th>Config</th>
                        </tr>
                      </thead>
                      <tbody id="ocupacionesInfo">
                        
                      </tbody>
                    </table>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
@endsection