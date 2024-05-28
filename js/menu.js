document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('aside a');
    const sections = document.querySelectorAll('section');

    links.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            
            // Ocultar todas las secciones
            sections.forEach(section => {
                section.style.display = 'none';
            });
            
            // Mostrar la sección correspondiente
            const sectionId = this.getAttribute('data-section');
            document.getElementById(sectionId).style.display = 'flex';
        });
    });

    // Mostrar la primera sección por defecto
    document.getElementById('bienvenidos').style.display = 'flex';
});