import hljs from 'highlight.js/lib/core';
import php from 'highlight.js/lib/languages/php';
hljs.registerLanguage('php', php);

const codeElements = document.querySelectorAll('code[data-language="php"]');
codeElements.forEach((codeElement: HTMLElement) => {
    hljs.highlightElement(codeElement);
});
