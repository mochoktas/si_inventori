@extends('layout.main')

@section('title_page','Profile')
@section('title','Profile')
@section('content')
                    <div class="card card-about-me">
                        <div class="header">
                            <h2>ABOUT ME</h2>
                        </div>
                        <div class="body">
                            <ul>
                            <li>
                                    <div class="title">
                                        <i class="material-icons">face</i>
                                        Nama
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->nama }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">email</i>
                                        Email Pribadi
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->email_pribadi }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">card_travel</i>
                                        Jobdesk
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->jobdesk }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">location_on</i>
                                        Alamat
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->alamat }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">library_books</i>
                                        Pendidikan
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->pendidikan }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">lock</i>
                                        NIK TA
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->nik_ta }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">location_on</i>
                                        Tempat Lahir
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->tempat_lahir }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">perm_contact_calendar</i>
                                        Tanggal Lahir
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->tanggal_lahir }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">lock</i>
                                        No KK
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->no_kk }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">lock</i>
                                        No KTP
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->no_ktp }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">phone</i>
                                        No HP Teknisi
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->no_hp_teknisi }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">phone</i>
                                        No HP Keluarga
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->no_hp_keluarga }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">face</i>
                                        Nama Keluarga Yang Bisa Dihubungi
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->nama_keluarga_yang_bisa_dihubungi }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">face</i>
                                        Nama Ibu
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->nama_ibu }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">perm_contact_calendar</i>
                                        Tanggal Masuk
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->tanggal_masuk }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">lock</i>
                                        BPJS Ketenagakerjaan
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->bpjs_ketenagakerjaan }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">lock</i>
                                        BPJS Kesehatan
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->bpjs_kesehatan }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">directions_car</i>
                                        Merk Kendaraan
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->merk_kendaraan }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">directions_car</i>
                                        Nopol Kendaraan
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->nopol_kendaraan }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">accessibility</i>
                                        Baju
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->baju }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">accessibility</i>
                                        sepatu
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->sepatu }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">accessibility</i>
                                        celana
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->celana }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">lock</i>
                                        Crew ID
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->crew_id }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">lock</i>
                                        Labourcode
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->labourcode }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">lock</i>
                                        Telegram ID
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->telegram_id }}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                        <i class="material-icons">face</i>
                                        Username
                                    </div>
                                    <div class="content">
                                        {{ Auth::user()->username }}
                                    </div>
                                </li>
                            </ul>
                        </div>
@endsection