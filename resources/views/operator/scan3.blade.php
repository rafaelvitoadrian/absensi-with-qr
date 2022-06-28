@extends('layouts.app')

@section('content')
    <!-- page content -->
    <div class="container">
        <div class="row">
            <div class="d-flex align-content-center justify-content-center col-md-12">
                <div id="reader" width="600px"></div>
                <input type="hidden" id="result">
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"> </script>
    <script>

    function onScanSuccess(decodedText, decodedResult) {
            $("#result").val(decodedText)

            let id= decodedText

            csrf_token = $('meta[name="csrf-token"]').attr('content');

            Swal.fire({
                title : 'succes',
                text : 'Berhasiil Scanner',
                confirmButtonColor:'#3085d6',
                confirmButtonText:'Ok',
            }).then((result)=>{
                if(result.value){
                    $.ajax({
                        url : "{{ route('validasiqr3') }}",
                        type : "POST",
                        data : {
                            '_method' : 'POST',
                            '_token' : csrf_token,
                            'qr_code' : id,
                        },
                        success: function (response){

                            // console.log(response)
                            if(response.status_error){
                                Swal.fire({
                                    type: 'error',
                                    title : 'Oopsss!',
                                    text : 'qr code tidak ditemukan'
                                })
                            }
                            Swal.fire({
                                icon : 'success',
                                type : 'succes',
                                title : 'Succes!',
                                text : 'Berhasil Absen'
                            });
                        }
                    })
                }
            })
        }

        function onScanFailure(error) {
            // handle scan failure, usually better to ignore and keep scanning.
            // for example:
            // console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader",
            { fps: 10, qrbox: {width: 250, height: 250} },
            /* verbose= */ false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>

@endpush
