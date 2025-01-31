class SkillsManager {
    constructor() {
        this.skillsData = null;
        this.container = document.querySelector('.dev-side .section-content');
    }

    async loadSkills() {
        try {
            const response = await fetch('/data/skills.json');
            this.skillsData = await response.json();
            this.renderSkills();
        } catch (error) {
            console.error('Skills yüklenirken hata:', error);
        }
    }

    renderSkills() {
        if (!this.skillsData || !this.container) return;

        const skillsHtml = this.skillsData.categories.map(category => `
            <div class="skill-category mb-4">
                <h4 class="skill-category-title">
                    <button class="btn btn-light w-100 text-left mb-2" type="button" data-toggle="collapse" data-target="#${category.id}">
                        ${category.title}
                    </button>
                </h4>
                <div class="collapse show" id="${category.id}">
                    <div class="skill-badges">
                        ${category.skills.map(skill => `
                            <span class="skill-badge">${skill}</span>
                        `).join('')}
                    </div>
                </div>
            </div>
        `).join('');

        this.container.innerHTML = `
            <div class="card">
                <div class="card-body">
                    ${skillsHtml}
                </div>
            </div>
        `;

        this.initializeCollapse();
    }

    initializeCollapse() {
        // Bootstrap collapse işlevselliği için gerekli
        $('.collapse').collapse({
            toggle: false
        });
    }
}

// Skills manager'ı başlat
document.addEventListener('DOMContentLoaded', () => {
    const skillsManager = new SkillsManager();
    skillsManager.loadSkills();
}); 