@extends ('layout/main')

@section ('title','Detail Order')

@section ('container')
  <link rel="stylesheet" href="/css/table.css">
  <link rel="stylesheet" href="/css/orderDetail.css">
  <div class="container">
    <div class="row">
      <div class="col-10 table1 rounded animated zoomIn faster mb-5">

        <div class="row mt-3">
          <div class="col-1">
            <a href="/order">
              <svg class="bi bi-chevron-left" width="50" height="50" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 010 .708L5.707 8l5.647 5.646a.5.5 0 01-.708.708l-6-6a.5.5 0 010-.708l6-6a.5.5 0 01.708 0z" clip-rule="evenodd"/>
              </svg>
            </a>
          </div>
          <div class="col-10 align-middle">
            <h1>{{$orders ['namaOrder']}}</h1>
          </div>

          <div class="container row">
            <div class="col-6">
              <table class="tabledo">
                <tr>
                  <th scope="row">Jenis Pekerjaan</th>
                  <td>&nbsp;:&nbsp;</td>
                  <td>{{$orders['jenisOrder']}}</td>
                </tr>
                <tr>
                  <th scope="row">Waktu Tenggat</th>
                  <td>&nbsp;:&nbsp;</td>
                  <td>{{$orders['deadlineOrder']}}</td>
                </tr>
                <tr>
                  <th scope="row">Biaya</th>
                  <td>&nbsp;:&nbsp;</td>
                  <td>Rp. {{number_format($accountings['priceOrder'])}}</td>
                </tr>
                <tr>
                  <th scope="row" class="align-top">Karyawan</th>
                  <td class="align-top">&nbsp;:&nbsp;</td>
                  <td>
                    @foreach ($progress_karyawans as $progress_karyawan)
                      <table class="tablek">
                        <tr>
                          <td rowspan="3">
                            FOTO
                          </td>
                          <th class="tdgap" scope="row">Nama : {{$progress_karyawan['namaKaryawan']}}</th>
                        </tr>
                          <td class="tdgap">
                            @if ($progress_karyawan['statusKerjaan'] == NULL)
                              -
                            @endif
                          </td>
                        <tr>
                          <td class="tdgap">Uang Pegangan : Rp. {{number_format($progress_karyawan['uangPegangan'])}}</td>
                        </tr>
                      </table>
                    @endforeach
                  </td>
                </tr>
              </table>
            </div>

            <div class="col-6">
              <table class="tabledo">
                <tr>
                  <th scope="row" class="tdwrap">Biaya yang Sudah Masuk</th>
                  <td class="tdwrap">&nbsp;:&nbsp;</td>
                  <td>Rp. {{number_format($accountings['biayaMasuk'])}}</td>
                </tr>
                <tr>
                  <th scope="row" class="tdwrap">Nota</th>
                  <td class="tdwrap">&nbsp;:&nbsp;</td>
                  <td>
                    -
                  </td>
                </tr>
                <tr>
                  <th scope="row" class="tdwrap">Progress Keseluruhan</th>
                  <td class="tdwrap">&nbsp;:&nbsp;</td>
                  <td class="progressw">
                    <div class="progress">
                      <div class="progress-bar bg-danger w-{{$orders['progressOrder']}}%" role="progressbar" aria-valuenow="{{$orders['progressOrder']}}%" aria-valuemin="0" aria-valuemax="100">{{$orders['progressOrder']}}%</div>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection