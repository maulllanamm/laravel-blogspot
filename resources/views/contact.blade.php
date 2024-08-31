<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <div class="container">
    <h1>Kontak Kami</h1>
    <form action="submit_contact.php" method="post">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="subject">Subjek:</label>
        <input type="text" id="subject" name="subject" required>

        <label for="message">Pesan:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Kirim Pesan</button>
    </form>
    </div>
</x-layout>
