import Editor from '@toast-ui/editor';
import '@toast-ui/editor/dist/toastui-editor.css';

const editorPostForm: HTMLElement = document.querySelector('#editor');

if (editorPostForm) {
    const editor = new Editor({
        el: editorPostForm,
        height: '500px',
        initialEditType: 'wysiwyg',
        previewStyle: 'vertical',
    });

    document.querySelector('#editor-post-form').addEventListener('submit', (e: Event) => {
        e.preventDefault();
        (document.querySelector('#content') as HTMLInputElement).value = editor.getHTML();
        (e.target as HTMLFormElement).submit();
    });
}

