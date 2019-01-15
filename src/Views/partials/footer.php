<footer class="footer">
    <span class="todo-count">
    <?=
    $nrOf = count(array_filter($todos, function($todo) {
        return $todo['completed'] === "false";
    }));
    if ($nrOf !== 1) {
        echo(' items left');
    } else {
        echo(' item left');
    }
        ?>
    </span>
    <form method="post" action="todos/clear-completed">
    <a href="/todos/clear"><button class="clear-completed" type="submit">Clear completed</button></a>
    </form>
</footer>

</main>

<footer class="site-footer">
    <div class="small-container">
        <p class="text-center">Made by <a href="http://danielhernqvist.chas.academy" target="_blank">Daniel Hernqvist</a></p>
    </div>
</footer>

<script type="module" src="<?= $this->getScript('scripts'); ?>"></script>

</body>

</html>