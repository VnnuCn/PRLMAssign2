    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Snowball Store | Student: Rodel Vincent B. Gamboa | CYB-201</p>
        <p>Stay warm with our premium snowballs - perfect for winter fun!</p>
    </footer>

    <script>
        // Simple snowflake animation using asterisks
        function createSnowflake() {
            const snowflake = document.createElement('div');
            snowflake.className = 'snowflake';
            snowflake.innerHTML = '*';
            snowflake.style.left = Math.random() * 100 + 'vw';
            snowflake.style.animationDuration = Math.random() * 3 + 2 + 's';
            snowflake.style.opacity = Math.random() * 0.5 + 0.3;
            snowflake.style.fontSize = Math.random() * 10 + 10 + 'px';
            
            document.getElementById('snowContainer').appendChild(snowflake);
            
            setTimeout(() => {
                snowflake.remove();
            }, 5000);
        }
        
        // Create snowflakes periodically
        setInterval(createSnowflake, 100);
    </script>
</body>
</html>
