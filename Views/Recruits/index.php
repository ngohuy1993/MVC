<h1>Recruitments</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/mvc/recruits/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> New Recruitments</a>
        <tr>
            <th>ID</th>
            <th>Task</th>
            <th>Description</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($recruits as $recruit)
        {
            echo '<tr>';
            echo "<td>" . $recruit['ID'] . "</td>";
            echo "<td>" . $recruit['Ten'] . "</td>";
            echo "<td>" . $recruit['Email'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/mvc/tasks/edit/" . $recruit["ID"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/mvc/tasks/delete/" . $recruit["ID"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>