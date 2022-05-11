<?php
    $total_pages = ceil($total / $per_page);
    //updates or inserts page into query string while persisting anything already present
    function persistQueryString($page)
    {
        $_GET["page"] = $page;
        //https://www.php.net/manual/en/function.http-build-query.php
        return http_build_query($_GET);
    }

    ?>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item <?php echo ($page - 1) < 1 ? "disabled" : ""; ?>">
                <a class="page-link" href="?<?php se(persistQueryString($page - 1)); ?>" tabindex="-1">Previous</a>
            </li>
            <?php for ($i = 0; $i < $total_pages; $i++) : ?>
                <li class="page-item <?php echo ($page - 1) == $i ? "active" : ""; ?>"><a class="page-link" href="?<?php se(persistQueryString($i + 1)); ?>"><?php echo ($i + 1); ?></a></li>
            <?php endfor; ?>
            <li class="page-item <?php echo ($page) >= $total_pages ? "disabled" : ""; ?>">
                <a class="page-link" href="?<?php se(persistQueryString($page + 1)); ?>">Next</a>
            </li>
        </ul>
    </nav>