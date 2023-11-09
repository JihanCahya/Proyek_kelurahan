<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Template</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .accordion-button:not(.collapsed) {
            background-color: #fff;
            /* Warna latar belakang ketika belum diklik */
        }

        h1 {
            margin-top: 100px;
            /* Jarak atas 4px dari elemen h1 */
        }
    </style>
</head>

<body>

    <div class="container mt-4">
        <h1 class="text-center mb-4">Persyaratan Pengajuan Surat</h1>
        <div class="accordion" id="faqAccordion">

            <!-- Surat 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                        Surat 1
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-center">
                        1. syarat 1 <br>
                        2. syarat 2 <br>
                        <a href="#" class="btn btn-primary mt-2">Ajukan Surat</a>
                    </div>
                </div>
            </div>
            <!-- Surat 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading2">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse1">
                        Surat 2
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#faqAccordion">
                    <div class="accordion-body text-center">
                        1. syarat 1 <br>
                        2. syarat 2 <br>
                        <a href="#" class="btn btn-primary mt-2">Ajukan Surat</a>
                    </div>
                </div>
            </div>

            <!-- Tambahkan pertanyaan dan jawaban tambahan di sini -->

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>