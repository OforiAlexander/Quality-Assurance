
const dropdownA = document.getElementById('strategic_focus');
        const dropdownB = document.getElementById('strategic_objective');
        const strategic_initiative = document.getElementById('strategic_initiative');

        // Options for dropdown B and C based on dropdown A selection
        const optionsForB = {
            PEOPLE: [
            '1.Attract and admit eligible students from all backgrounds', 
            '2.Offer excellent teaching and learning experiences to all students that will equip them to excel in their chosen careers.',
             '3.Attract, recruit and retain the highest calibre of staff', 
             '4.Retain and retrain alumni in executive continuous professional development programmes', 
             '5.Support staff in personal and professional growth and developmentT', 
             '6.Work towards a bonding relationship among students,staff and alumni that promotes collaborative learning through mentorships and coaching', 
             '8.Nurture good and close relationships with our external stakeholders, community, industry, government and partners', 
             ],
             
            PROCESSES: [
            '1.Implement a strengthened corporate governance mechanism to achieve organisational goals', 
            '2.Enhance the capacity of Management and leadership', 
            '3.Improve the performance of all leaders', 
            '4.Streamline administrative functions, responsibilities and processes for efficiency and productivity', 
            '5.Build an organizational climate that is based on shared values and teamwork', 
            '6.Automate major processes and deploy IT to go paperless as much as possible', 
            '7.Leverage ICT resources, and the University’s Learning Management System (LMS) to enhance the effectiveness of teaching and learning', 
            'Yet another option', 
            'One more option'],

            PLANET: [
            '1.Continue to build the physical and virtual infrastructure that  iscongenial for world-class education and research',
            '2.Improve access to office space, Internet connectivity and continuous supply of electricity and water',
            '3.Improve space utilization and maintenance of assets',
            '4.Improve the safety and security of our physical and virtual environment',
            '5.Continue to invest in information communication technologies that will enhance the quality of teaching,research and service',
            '6.Create an equal opportunity environment for inclusiveness',
            '7.Increase the installation of a solar lighting system and use of other renewable energy systems on campus',
            '8.Minimize our environmental impact',],

            RELEVANCE: [
            '1. Develop a framework to ensure local, national, regional and global relevance',
                '2. Promote industry relations and interaction with the business community to advance the institutional goal of relevance',
                '3. Establish and expand appropriate and purposeful partnerships and collaborations with institutions and networks across the sectors of society that contribute to excellence in teaching, research, consulting, and services.',
                '4. Influence policy and action to change through research.',
                '5. Engage with the public and policy makers to shape our teaching and research.',
                '6. Attract students from all over the country and the sub region to pursue the distance learning programmes at UPSA',
                '7. Establish satellite campuses in other regions',
                '8. Position UPSA as an entrepreneurial university with the expertise to offer research and consultancy services',
                '9. Encourage staff industry attachments to gain industry experience.',
                '10. Embark on community action initiatives',],

            IMPACT: [
            '1.Promote academic excellence in teaching using the highest standards and best practices',
                '2.Create an institution of active and reflective teaching and continuous learning',
                '3.Produce quality graduates that contribute to changing the world for the better',
                '4.Strengthen the research capacity and research professionalism of faculty including grantsmanship',
                '5.Increase publications in high-impact ranking outlets or journals',
                '6.Establish Research Chairs in all faculties, particularly in high impact areas.',
                '7.To be regionally and globally recognised for research excellence',
                '8.Promote quality and innovative research that addresses emerging issues in UPSA’s research niches',
                '9.Disseminate research findings effectively',],

            SUSTAINABILITY: [
                '1.Diversify the University’s sources of income.',
                '2.Ensure fiscal discipline in expenditures to effectively manage funds.',
                '3.Raise funds to support brilliant but needy students through the Vice-Chancellor’s Endowment Fund (VCEF).',
                '4.Improve adherence to procurement regulations, public financial management Act, as well as budgeting and budgetary controls.',
                '5.Ensure effective risk management.',],

             CONTINUOUS_IMPROVEMENT: [
                '1.Build a robust UPSA STRATEGIC PLAN-(2022-2031) system',
                '2.Develop new, innovative and transformative academic programmes at the diploma, undergraduate and postgraduate levels and review old ones to ensure that our portfolio offerings reflect industry needs.',
                '3.Continue to promote scholarship with professionalism as the hallmark of the University.',
                '4.Stock the library with up-to-date teaching and learning materials and emphasize the importance of its utilization.',
                '5.Increase the visibility of the University.',
                '6.Develop and implement a monitoring and evaluation plan for the University’s strategic plan.',],


        };

        const optionsForC = {
            //For PEOPLE
            '1.Attract and admit eligible students from all backgrounds':  [
                'Develop and execute a coordinated marketing and communication strategy that support diversity, equity and inclusion in student recruitment', 
                'Increase scholarships to brilliant but needy students', 
                'Develop a policy for noncompetitive admission reserved for students from less endowed communities', 
                'Develop connections to promote UPSA programmes to international studentsOption 3 for One More', 
            ],
            '2.Offer excellent teaching and learning experiences to all students that will equip them to excel in their chosen careers.': [
                'Institute excellence awards in teaching, research and service or administration', 
                'Conduct faculty evaluation regarding teaching, research and service', 
                'Conduct staff evaluation including administrative heads', 
                'Conduct biannual tracer studies',
            ],
            '3.Attract, recruit and retain the highest calibre of staff': [
                'Improve the conditions of service and working environment for all staff', 
                'Organise seminar on promotions', 
                'Institute a mentorship or “academic blind” dating programme for early-career academics', 
                'Engage visiting professors from Ghana and abroad who have a proven track record for excellence in teaching, research and service', 
                'Conduct biannual staff satisfaction survey', 
                'Institute Exit Interview for staff who resign'
            ],
            '4.Retain and retrain alumni in executive continuous professional development programmes': [
                'Institute mechanisms of engaging alumni (e.g., Master Class, Guest Lecture opportunities)', 
                'Continue to market the University to alumni and other stakeholders through continuous professional development programmes', 
                'Develop a policy on the retention of alumni', 
                'Improve alumni relations and community engagement'
            ],
            '5.Support staff in personal and professional growth and developmentT': [
                'Undertake staff needs assessment and develop a human resources management policy to Support the professional growth and development of staff', 
                ' Institute career development and succession plan for the University', 
               
            ],
            '6.Work towards a bonding relationship among students,staff and alumni that promotes collaborative learning through mentorships and coaching': [
                'Create avenues or platforms for students, staff and alumni to interact and engage.', 
                'Foster research collaborations between postgraduate students and faculty', 
                'Connect students to industry coaches', 
                'Increase internship opportunities for both staff and students'
            ],
            '7. Promote the health and wellness of our students and staff through sports, recreation, health screening and psycho-social support systems': [
                'Option 1 for One More', 
                'Option 2 for One More', 
                'Option 3 for One More', 
                'Option 3 for One More', 
                'Option 3 for One More', 
                'Option 3 for One More', 
                'Option 3 for One More', 
                'Option 3 for One More'
            ],
            '8.Nurture good and close relationships with our external stakeholders, community, industry, government and partners': [
                'Option 1 for One More', 
                'Option 2 for One More', 
               
            ],

            //PROCESSES  
            '1.Implement a strengthened corporate governance mechanism to achieve organisational goals': [
                'Option 1 for One More', 
                'Option 2 for One More', 
                'Option 3 for One More', 
                
            ],
            '2.Enhance the capacity of Management and leadership': [
                'Option 1 for One More', 
                'Option 2 for One More',  
                'Option 3 for One More'
            ],
            '3.Improve the performance of all leaders': [
                'Option 1 for One More', 
                'Option 2 for One More'
            ],
            '4.Streamline administrative functions, responsibilities and processes for efficiency and productivity': [
                'Option 1 for One More', 
                'Option 2 for One More', 
                'Option 3 for One More', 
            ],
            '5.Build an organizational climate that is based on shared values and teamwork': [
                'Option 1 for One More', 
                'Option 2 for One More', 
                
            ],
            '6.Automate major processes and deploy IT to go paperless as much as possible': [
                'Option 1 for One More', 
                'Option 2 for One More', 
                'Option 3 for One More', 
                
            ],
            '7.Leverage ICT resources, and the University’s Learning Management System (LMS) to enhance the effectiveness of teaching and learning': [
                'Option 1 for One More', 
                'Option 2 for One More', 
                'Option 3 for One More', 
            ],

            //PLANET
            '1.Continue to build the physical and virtual infrastructure that  iscongenial for world-class education and research': [
            ' Maintain a serene teaching and learning environment, well-organized, appealing and conducive to the functions of the University',
             'Option 2 for One More', 
             'Option 3 for One More', 
             
            ],
            '2.Improve access to office space, Internet connectivity and continuous supply of electricity and water': [
                'Option 1 for One More', 
                'Option 2 for One More', 
               
            ],
            '3.Improve space utilization and maintenance of assets': [
                'Option 1 for One More', 
                'Option 2 for One More', 
                'Option 3 for One More', 
               
            ],
            '4.Improve the safety and security of our physical and virtual environment': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
            'Option 3 for One More', 
            'Option 3 for One More', 
            'Option 3 for One More', 
            'Option 3 for One More', 
            'Option 3 for One More', 
            'Option 3 for One More'
            ],
            '5.Continue to invest in information communication technologies that will enhance the quality of teaching,research and service': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
            'Option 3 for One More', 
            'Option 3 for One More', 
            'Option 3 for One More', 
            'Option 3 for One More', 
            'Option 3 for One More', 
            'Option 3 for One More'
            ],
            '6.Create an equal opportunity environment for inclusiveness': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
            'Option 3 for One More', 
            'Option 3 for One More', 
            'Option 3 for One More', 
            'Option 3 for One More', 
            'Option 3 for One More', 
            'Option 3 for One More'
            ],
            '7.Increase the installation of a solar lighting system and use of other renewable energy systems on campus': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
          
            ],
            '8.Minimize our environmental impac': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
          
            ],

            //RELEVANCE
            '1. Develop a framework to ensure local, national, regional and global relevance': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
            
            ],
            '2. Promote industry relations and interaction with the business community to advance the institutional goal of relevance': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
           
            ],
            '3. Establish and expand appropriate and purposeful partnerships and collaborations with institutions and networks across the sectors of society that contribute to excellence in teaching, research, consulting, and services.': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
           
            ],
            '4. Influence policy and action to change through research.': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
           
            ],
            '5. Engage with the public and policy makers to shape our teaching and research.':  [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],
            '6. Attract students from all over the country and the sub region to pursue the distance learning programmes at UPSA': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],
            '7. Establish satellite campuses in other regions': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],
            '8. Position UPSA as an entrepreneurial university with the expertise to offer research and consultancy services': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],
            '9. Encourage staff industry attachments to gain industry experience.': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],
            '10. Embark on community action initiatives': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],

            //IMPACT
            '1.Promote academic excellence in teaching using the highest standards and best practices': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],
            '2.Create an institution of active and reflective teaching and continuous learning': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],
            '3.Produce quality graduates that contribute to changing the world for the better': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],
            '4.Strengthen the research capacity and research professionalism of faculty including grantsmanship': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],
            '5.Increase publications in high-impact ranking outlets or journals': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],
            '6.Establish Research Chairs in all faculties, particularly in high impact areas.': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],
            '7.To be regionally and globally recognised for research excellence': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],
            '8.Promote quality and innovative research that addresses emerging issues in UPSA’s research niches': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],
            '9.Disseminate research findings effectively': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],

            //SUSTAINABILITY
            '1.Diversify the University’s sources of income.': [
            'Competitively promote the use and hire of all UPSA facilities within a regulatory framework', 
            'Develop and implement a comprehensive plan of fundraising from alumni and philanthropists ', 
            'The centres and faculties should aggressively seek grants for research ', 
            'Develop marketable short courses for training',
            'Seek consultancy services' ,
           
        ],
            '2.Ensure fiscal discipline in expenditures to effectively manage funds.': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],
            '3.Raise funds to support brilliant but needy students through the Vice-Chancellor’s Endowment Fund (VCEF).': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],
            '4.Improve adherence to procurement regulations, public financial management Act, as well as budgeting and budgetary controls.': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],
            '5.Ensure effective risk management.': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],

            //CONTINUOUS IMPROVEMENT
            '1.Build a robust UPSA STRATEGIC PLAN-(2022-2031) system': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],
            '2.Develop new, innovative and transformative academic programmes at the diploma, undergraduate and postgraduate levels and review old ones to ensure that our portfolio offerings reflect industry needs.': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],
            '3.Continue to promote scholarship with professionalism as the hallmark of the University.': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],
            '4.Stock the library with up-to-date teaching and learning materials and emphasize the importance of its utilization.': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],
            '5.Increase the visibility of the University.': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],
            '6.Develop and implement a monitoring and evaluation plan for the University’s strategic plan.': [
            'Option 1 for One More', 
            'Option 2 for One More', 
            'Option 3 for One More', 
        ],
        };

        // Function to populate dropdown options
        function populateDropdown(selectElement, options) {
            selectElement.innerHTML = '';
            options.forEach(option => {
                const optionElement = document.createElement('option');
                optionElement.value = option;
                optionElement.textContent = option;
                selectElement.appendChild(optionElement);
            });
        }

        // Event listener for dropdown A
        dropdownA.addEventListener('change', function() {
            const selectedOptionA = dropdownA.value;
            const optionsForDropdownB = optionsForB[selectedOptionA];
            populateDropdown(dropdownB, optionsForDropdownB);
            // Trigger change event on B to update C
            dropdownB.dispatchEvent(new Event('change'));
        });

        // Event listener for dropdown B
        dropdownB.addEventListener('change', function() {
            const selectedOptionB = dropdownB.value;
            const optionsForstrategic_initiative = optionsForC[selectedOptionB];
            populateDropdown(strategic_initiative, optionsForstrategic_initiative);
        });

        // Initial population of dropdown B and C based on default selection in A
        dropdownA.dispatchEvent(new Event('change'));