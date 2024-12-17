<!DOCTYPE html>
<html lang="en">
<?=$this->include('components/header')?>
<body>
    <div class="wrapper">
        <?=$this->include('components/sidebar')?>
        
        <div class="main">
            <?=$this->include('components/navbar')?>
           
            <main class="content">
                <?=$this->renderSection('content')?>
            </main>

        </div>
    </div>
<?=$this->include('components/footer')?>


</body>

</html>