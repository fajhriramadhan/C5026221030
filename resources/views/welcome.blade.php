<!DOCTYPE html>
<html lang="en">
<!-- link bg : https://th.bing.com/th/id/OIP.P7NHBRzulkzVWFpJlFPlqgHaEK?pid=ImgDet&rs=1 -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
        function showAlert() {
            alert("Anda telah memilih karakter favorit yang sangat hebat!");
        }

        function validateForm() {
            var name = document.forms["myForm"]["name"].value;
            var email = document.forms["myForm"]["email"].value;
            var pesan = document.forms["myForm"]["pesan"].value;
            if (name == "") {
                alert("Nama harus diisi");
                return false;
            } else if (!/^[a-zA-Z ]+$/.test(name)) {
                alert("Nama hanya boleh berisi huruf dan spasi");
                return false;
            }
            if (email == "") {
                alert("Alamat Email harus diisi");
                return false;
            } else if (!email.endsWith("@gmail.com")) {
                alert("Alamat Email harus diakhiri dengan @gmail.com");
                return false;
            }

            // Validasi Pesan dan Kesan
            if (message == "") {
                alert("Pesan dan Kesan harus diisi");
                return false;
            } else if (message.split(" ").length > 200) {
                alert("Pesan dan Kesan terbatas hingga 200 kata");
                return false;
            }

        }
    </script>
    <title>Onepiece</title>
</head>

<body>
    <div class="bannerindex">
        <div class="row">
            <div class="col">

                <div class="navbar">
                    <img src="logofix.webp" class="logo">
                    <ul>
                        <li> <a href="index.html">Home</a></li>
                        <li> <a href="index.html">Crew</a></li>
                        <li> <a href="index.html">Experience</a></li>
                        <li> <a href="index.html">Journey</a></li>
                        <li> <a href="index.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="contentright">
            <h1>ONE PIECE</h1><br>
            <p style="color: whitesmoke;">One Piece is a Japanese manga series written and illustrated by Eiichiro
                Oda <br> It has been
                serialized in Weekly Shōnen Jump since July 22, 1997.</p>
            <div>
                <button type="button"><span></span>Get to Know</button>
                <button type="button"><span> </span>Join Us</button>
            </div>
        </div>
    </div>
    <div class="bannertop">
        <div class="border-primary">
            <div class="row">
                <div class="col">
                    <div class="container" style="padding-top: 50px; color: black;">
                        <h1 style="text-align: center;">TUGAS & CATATAN</h1>
                        <p style=" text-align: justify;">Dalam pengaturan daftar tugas dan catatan ini, masing-masing
                            entri mewakili lintasan progres harian yang memiliki signifikansi mendalam. Mulai dari
                            tugas-tugas yang menuntut hingga catatan reflektif yang membangun inspirasi, setiap item
                            merefleksikan perjalanan pengguna dalam menghadapi dinamika kompleksitas kehidupan
                            sehari-hari. Di tengah daftar tugas yang terperinci, terdapat pencapaian-pencapaian
                            substansial, seperti penyelesaian proyek atau capaian-target pribadi. Catatan-catatan yang
                            singkat berfungsi sebagai kronik sentimen, kilasan ide, atau momen kebahagiaan yang,
                            tanpanya, mungkin terlewatkan dari ingatan. Melalui setiap entri, daftar ini bukan sekadar
                            katalog rutin administratif, melainkan narasi hidup yang terus-menerus berkembang.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row " style="padding-left: 40px;text-align: justify;">
            <div class="col-4 header shado">
                <ul>
                    <li> Kumpulan Tugas & Catatan</li>
                    <li style="list-style-type:'🗺';">Pertemuan 2 : <a class="underline text-gray-900 dark:text-white"
                            href="{{ url('p2') }}">Link</a></li>
                    <li style="list-style-type:'🔫';">Pertemuan 3 : <a class="underline text-gray-900 dark:text-white"
                            href="{{ url('p3') }}">Link</a></li>
                    <li style="list-style-type:'💊';">Pertemuan 4 : <a href="{{ url('p4') }}"
                            class="underline text-gray-900 dark:text-white">Link</a></li>
                    <li style="list-style-type:'🔑';">Pertemuan 5 :<a href="{{ url('p5') }}"
                        class="underline text-gray-900 dark:text-white">Link</a></li>
                    <li style="list-style-type:'🗺';">Tugas 1 : <a href="{{ url('tugas1') }}"
                            class="underline text-gray-900 dark:text-white">Link</a></li>
                    <li style="list-style-type:'⚔️';">Tugas 2 : <a href="{{ url('tugas2') }}"
                            class="underline text-gray-900 dark:text-white">Link</a></li>
                    <li style="list-style-type:'🍳';">Tugas 3 : <a href="{{ url('tugas3') }}"
                            class="underline text-gray-900 dark:text-white">Link</a></li>


                </ul>
            </div>
            <div class="col-7">
                <p>Each crew member has their own unique appeal and contributions to their extraordinary adventures.
                    Choose one of them and discover the thrilling adventures they experience on their journey to the One
                    Piece!</p>
                <img src="luffy1.jpeg" style="max-height: 30vh;max-width: 23vh;" style="padding-left: 43%;">
                <div class="btn-group" style="padding-left: 30px;">
                    <button type="button" class="btn  btn-danger dropdown-toggle" data-toggle="dropdown">
                        Luffy
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" onclick="showAlert()" href="#"> Luffy</a>
                        <a class="dropdown-item" onclick="showAlert()" href="#"> Zoro</a>
                        <a class="dropdown-item" onclick="showAlert()" href="#"> Nami</a>
                        <a class="dropdown-item" onclick="showAlert()" href="#"> Franky</a>
                        <a class="dropdown-item" onclick="showAlert()" href="#"> Brook</a>
                        <a class="dropdown-item" onclick="showAlert()" href="#"> Usopp</a>
                        <a class="dropdown-item" onclick="showAlert()" href="#"> Sanji</a>
                        <a class="dropdown-item" onclick="showAlert()" href="#"> Chopper</a>
                        <a class="dropdown-item" onclick="showAlert()" href="#"> Nico Robin</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="justify-content-md-around">
                <br>
                <ul style="display: inline-flex; list-style: none;">
                    <li></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="bannermid">
        <div class="row">
            <div class="col">
                <div class="container" style="padding-top: 20px;">
                    <h1 style="text-align: center; color: white;">WRITE DOWN YOUR MESSAGE TO ODA!</h1>
                    <br>
                    <div class="formulir">
                        <form name="myForm" action="index.html" onsubmit="return validateForm()" method="post">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" class="form-control"
                                placeholder="Your name" />
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Your email" />
                            <label for="pesan">Pesan & Kesan</label>
                            <input type="text" id="pesan" name="pesan" class="form-control"
                                placeholder="Kesan & Pesan">
                            <br>
                            <div class="container" style="padding-left: 43%;">
                                <input type="submit" value="Submit" class="btn btn-warning" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
