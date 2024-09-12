<x-layout.app>
    <div class="content1">
        <h1>Contact</h1>
        <p>Heb je vragen of wil je met ons in contact komen? Vul het onderstaande formulier in of stuur ons een e-mail op <a href="mailto:info@smart-solutions.nl">info@smart-solutions.nl</a>. We proberen zo snel mogelijk te reageren!</p>

        <form class="contact-form">
            <label for="name">Naam:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Onderwerp:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Tekst:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Verzenden</button>
        </form>
    </div>
</x-layout.app>
