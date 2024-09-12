<footer class="footer">
    <div class="footer-container">
        <div class="footer-links">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About Us</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </div>

        <div class="footer-newsletter">
            <h4>Subscribe to Our Newsletter</h4>
            <form action="#">
                <input type="email" placeholder="Enter your email" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>

        <div class="footer-social">
            <h4>Follow Us</h4>
            <div class="social-icons">
                <a href="#" class="social-icon">Facebook</a>
                <a href="#" class="social-icon">Twitter</a>
                <a href="#" class="social-icon">Instagram</a>
                <a href="#" class="social-icon">LinkedIn</a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2023 Your Company. All rights reserved.</p>
    </div>
</footer>
