            
            <input type="text" id="searchInput" placeholder="Tìm kiếm">
            <button onclick="searchMovies()">Tìm</button>
            <div class="h1">Danh mục</div>
            <div id="category">
                <?php
                    include_once("controllers/show_category.php")
                ?>
            </div>
            <script>
                function searchMovies() {
                    const searchTerm = document.getElementById('searchInput').value;
                    const xhr = new XMLHttpRequest();

                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            const movieListDiv = document.getElementById('movie-list');
                            movieListDiv.innerHTML = xhr.responseText;
                        }
                    };

                    xhr.open('GET', `controllers/search.php?search=${searchTerm}`, true);
                    xhr.send();
                }
            </script>