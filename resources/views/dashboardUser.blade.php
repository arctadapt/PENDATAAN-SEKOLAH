<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Menarik</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <!-- Link ke file CSS AOS melalui CDN -->
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <style>
        body {
            /* background-color: #76aeeb; */
            overflow: hidden;
            position: relative;
            color: #ffffff;
        }

        .shape {
            position: absolute;
            pointer-events: none;
            z-index: -1;
            animation: float 5s infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0) rotate(0);
            }

            50% {
                transform: translateY(-100px) rotate(180deg);
            }

            100% {
                transform: translateY(0) rotate(360deg);
            }
        }

        .shape.bubble {
            border-radius: 50%;
        }

        .shape.block {
            border-radius: 10%;
        }

        .logo-container {
            text-align: center;
            margin-top: 50px;
        }

        .logo {
            width: 150px;
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1));
            transition: transform 0.5s;
        }

        .logo:hover {
            transform: translateY(-5px);
        }

        .school-name {
            font-size: 1.5rem;
            font-weight: 500;
            color: black
        }

        .box {
               /* aa67f2 */
        background: linear-gradient(145deg, #6c5ce7, #4834d4);
        color: #ffffff;
        border: 1px solid #4834d4;
        padding: 20px;
        text-align: center;
        margin: 20px;
        border-radius: 20px;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        transition: transform 0.3s, box-shadow 0.3s;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4), inset 0 0 0 2px rgba(255, 255, 255, 0.1);
    }

    .box:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: 0 25px 40px rgba(0, 0, 0, 0.6), inset 0 0 0 2px rgba(255, 255, 255, 0.2);
    }

    .box .icon {
        color: #ffffff;
        font-size: 3rem;
        margin-bottom: 10px;
    }

    .box .title {
        font-size: 1.5rem;
        color: #ffffff;
    }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-20px);
            }

            60% {
                transform: translateY(-10px);
            }
        }

        .box .icon.animated {
            animation: bounce 4s infinite;
        }

        .form-container {
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .close {
            color: #6c5ce7;
        }

        span.select2.select2-container.select2-container--classic {
            width: 100% !important;
        }


    </style>
</head>

<body style="background-image: url({{ asset('bg.jpg') }}); background-size:cover;">

    <div class="shape bubble" style="top: 10%; left: 10%; width: 60px; height: 60px; background-color: #6c5ce7;"></div>
    <div class="shape block" style="top: 20%; left: 40%; width: 40px; height: 40px; background-color: #6c5ce7;"></div>
    <div class="shape bubble" style="top: 30%; left: 70%; width: 80px; height: 80px; background-color: #6c5ce7;"></div>
    <div class="shape block" style="top: 50%; left: 20%; width: 50px; height: 50px; background-color: #6c5ce7;"></div>
    <div class="shape bubble" style="top: 60%; left: 50%; width: 30px; height: 30px; background-color: #6c5ce7;"></div>
    <div class="shape block" style="top: 80%; left: 80%; width: 70px; height: 70px; background-color: #6c5ce7;"></div>

    <div class="logo-container">
        <img src="logo_pi.png" alt="Logo" class="mx-auto">
        <div class="school-name">SMK PRAKARYA INTERNASIONAL</div>
    </div>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <button type="button" class="col-md-4 box" data-hs-overlay="#hs-vertically-centered-modal">
                <div class="icon animated">
                    <i class="fas fa-file-signature"></i>
                </div>
                <div class="title">
                    Surat Izin Keluar
                </div>
            </button>
            {{-- moving class --}}
            <button type="button" class="col-md-4 box" data-hs-overlay="#moving-class">
                <div class="icon animated">
                    <i class="fas fa-exchange-alt"></i>
                </div>
                <div class="title">
                    Perpindahan Kelas
                </div>
            </button>
            {{-- Surat Tamu --}}
            <button type="button" class="col-md-4 box" data-hs-overlay="#surat-tamu">
                <div class="icon animated">
                    <i class="fas fa-address-book"></i> <!-- Updated icon -->
                </div>
                <div class="title">
                    Guestbook
                </div>
            </button>

            <div class="col-md-4 box">
                <div class="icon animated">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="title">
                    Keterlambatan
                </div>
            </div>
        </div>
    </div>

    <div id="hs-vertically-centered-modal"
    class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
    <div
        class="hs-overlay-open:opacity-100 mx-auto hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
        <div class="flex flex-col w-full p-5 text-black bg-white border shadow-sm pointer-events-auto rounded-xl">
            <form action="{{ route('keluar-kampus.storeIzinkeluar') }}" method="POST" id="createFormIzinkeluar">
                @csrf
                <div class="text-black form-group">
                    <label for="siswa_id">Nama Siswa</label>
                    <select name="siswa_id[]" id="siswa_id" class="w-full text-black bg-gray-300" multiple
                        required>
                        @foreach ($siswas as $siswa)
                            <option value="{{ $siswa->id }}" class="text-black">{{ $siswa->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="alasan">Alasan</label>
                    <input type="text" name="alasan" class="form-control" id="alasan" required>
                </div>

                <div class="form-group">
                    <label for="mapel">Mapel</label>
                    <input type="text" name="mapel" class="form-control" id="mapel" required>
                </div>

                <div>
                    <button type="reset" class="text-white btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-primary" id="submitForm">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>
    {{-- Modal untuk perpindahan kelas --}}
    <div id="moving-class"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
        <div
            class="hs-overlay-open:opacity-100 mx-auto hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
            <div class="flex flex-col w-full p-5 text-black bg-white border shadow-sm pointer-events-auto rounded-xl">
                <form action="{{ route('keluar-kampus.storePindahkelas') }}" method="POST"
                    id="createFormPerpindahankelas">
                    @csrf
                    <div class="">
                        <label for="kelas_id">Kelas</label>
                        <select name="kelas_id" id="kelas_id" class="w-full" required>
                            @foreach ($kelas as $kls)
                                <option value="{{ $kls->id }}">{{ $kls->kelas . ' - ' . $kls->jurusan }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jumlah_siswa">Jumlah Siswa</label>
                        <input type="number" name="jumlah_siswa" class="form-control" id="jumlah_siswa" required>
                    </div>

                    <div class="form-group">
                        <label for="mapel">Mata Pelajaran</label>
                        <input type="text" name="mapel" class="form-control" id="mapel" required>
                    </div>

                    <div class="">
                        <button type="reset" class="text-white btn btn-warning">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{{-- Surat tamu --}}
<div id="surat-tamu" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
    <div class="hs-overlay-open:opacity-100 mx-auto hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-3xl sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
        <div class="flex flex-col w-full p-8 text-black bg-white border shadow-sm pointer-events-auto rounded-xl">
            <form action="{{ route('keluar-kampus.storeSuratTamu') }}" method="POST" id="createFormSuratTamu" class="w-full max-w-lg mx-auto">
                @csrf
                <div class="form-group">
                    <label for="identitas">Saya adalah</label>
                    <select name="identitas" id="identitas" class="form-control">
                        <option value="visitor">Visitor</option>
                        <option value="orang_tua_siswa">Orang Tua Siswa</option>
                        <option value="perguruan_tinggi">Perguruan Tinggi</option>
                        <option value="media">Media</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" required>
                </div>

                <div class="form-group">
                    <label for="darimana">Darimana</label>
                    <input type="text" name="darimana" class="form-control" id="darimana" required>
                </div>

                <div class="form-group">
                    <label for="kemana">Kemana</label>
                    <input type="text" name="kemana" class="form-control" id="kemana" required>
                </div>

                <div class="flex justify-end">
                    <button type="reset" class="text-white btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-primary ml-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('createFormIzinkeluar').addEventListener('submit', function (event) {
            event.preventDefault(); // Mencegah pengiriman formulir biasa
            var form = this;
            var formData = new FormData(form);

            // Kirim permintaan Ajax
            fetch(form.action, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (response.ok) {
                    // Mendapatkan respons JSON dari server
                    return response.json();
                } else {
                    throw new Error('Network response was not ok.');
                }
            })
            .then(data => {
                // Tutup modal jika respons dari server adalah 200 (OK)
                var modal = document.getElementById('hs-vertically-centered-modal');
                modal.classList.add('hidden');
                modal.classList.add('pointer-events-none'); // Tambahkan kelas pointer-events-none untuk menonaktifkan interaksi pengguna
                form.reset(); // Reset formulir setelah berhasil

                // Mengunduh setiap file PDF
                data.pdf_files.forEach(pdfFile => {
                    window.open(pdfFile); // Membuka file PDF dalam tab baru
                });

                // Merefresh halaman jika perlu
                location.reload();
            })
            .catch(error => console.error('Error:', error));
        });
    });
</script>




    <script>
        function createShapes() {
            const container = document.body;
            const shapeCount = 10;

            for (let i = 0; i < shapeCount; i++) {
                const shape = document.createElement('div');
                shape.className = 'shape';
                shape.classList.add(Math.random() < 0.5 ? 'cube' : 'circle');
                shape.style.left = `${Math.random() * container.clientWidth}px`;
                container.appendChild(shape);
            }
        }

        window.onload = createShapes;
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>

$('#siswa_id').select2({
    placeholder: 'Cari Siswa...',
    allowClear: true,
    theme: "classic",
    templateResult: function(data) {
        if (!data.id) {

            return data.text;
        }

        var $result = $('<span></span>');
        $result.text(data.text);
        $result.css('color', 'black');

        return $result;
    }
});

</script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>

</html>