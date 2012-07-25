<div class="page-header">
    <h1>Editer une page</h1>
</div>

<?php echo $this->Form->create('Post'); ?>

    <?php echo $this->Form->input('name', array('label'=>'Titre')); ?>
    <?php echo $this->Form->input('slug', array('label'=>'URL')); ?>
    <?php echo $this->Form->input('id'); ?>
    <?php echo $this->Form->input('type', array('value'=>'page', 'type'=>'hidden')); ?>
    <?php echo $this->Form->input('content', array('label'=>'Contenu')); ?>
    <?php echo $this->Form->input('online', array('label'=>'En ligne ?', 'type'=>'checkbox')); ?>

<?php echo $this->Form->end('Envoyer'); ?>

    <?php $this->Html->script('tiny_mce/tiny_mce.js', array('inline'=>false)); ?>
    <?php $this->Html->scriptStart(array('inline'=>false)); ?>
    tinyMCE.init({
        mode : 'textareas',
        theme: 'advanced',
        plugins: 'inlinepopups, paste, image',
        
        theme_advanced_buttons1: 'bold,italic,underline,|,bullist,numlist,|,justifuleft,justifycenter,justifyright,justifyfull,|,link,unlink,image,|,formatselect,code',
        theme_advanced_buttons2: '',
        theme_advanced_buttons3: '',
        theme_advanced_buttons4: '',
        theme_advanced_resizing: true,
        paste_remove_styles: true,
        paste_remove_spans: true,
        paste_strip_class_attributes: "all",
        image_explorer: '<?php echo $this->Html->url(array('controller'=>'medias', 'action'=>'index', $this->request->data['Post']['id'])) ?>',
        image_edit: '<?php echo $this->Html->url(array('controller'=>'medias', 'action'=>'show')) ?>',
        relative_urls: false,
        content_css: '<?php echo $this->Html->url('/css/wysiwyg.css') ?>'
    });
    
    function send_to_editor(content){
        var ed = tinyMCE.activeEditor;
        ed.execCommand('mceInsertContent', false, content);
    }
    <?php $this->Html->scriptEnd(); ?>