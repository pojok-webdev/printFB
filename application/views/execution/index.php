<table>
    <thead>
        <tr><th>No</th><th>No FB</th><th>Nama</th><th>Action</th></tr>
    </thead>
    <tbody>
        <?php $c = 1;?>
        <?php foreach($fbs as $fb){?>
            <tr>
                <td><?php echo $c++;?></td>
                <td><?php echo $fb->nofb;?></td>
                <td><?php echo $fb->name;?></td>
                <td><a href="/fbs/hal1/<?php echo $fb->nofb;?>"> Show FB</a></td>
            </tr>
        <?php }?>
    </tbody>
</table>