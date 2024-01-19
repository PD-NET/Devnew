[![SAST CODEQL](https://img.shields.io/badge/SAST-CODEQL-voilet.svg)](https://github.com/github/codeql)
[![DAST: WAPITI](https://img.shields.io/badge/DAST-WAPITI-indigo.svg)](https://github.com/wapiti-scanner/wapiti)
[![Functional Testing: Selenium](https://img.shields.io/badge/:Functional_Testing-Selenium-blue.svg)](https://github.com/SeleniumHQ/selenium)
[![Dynamic Testing: Code_Coverage](https://img.shields.io/badge/:Dynamic_Testing-Code_Coverage-green.svg)](https://github.com/marketplace/codecov)
[![Container: Docker](https://img.shields.io/badge/:Container-Docker-yellow.svg)](https://github.com/docker/getting-started)
[![IAC: Terraform](https://img.shields.io/badge/:IAC-Terraform-orange.svg)](https://github.com/hashicorp/terraform)

## PG DISSERTATION MANAGEMENT SYSTEM 

  ## INTRODUCTION TO THE PROJECT
 
  PG dissertation is the partial requirement for the fulfillment of Pg degree. During 1st year of post graduation, student select PG dissertation topic and carry out research under supervision of PG guide and     submit dissertation during final year of evaluation. The following are the major steps of the dissertation: Selection of topics: 
  1. As per the thrust ideas of research of a particular department.
  2. Maintaining student guide ratio.
  3. To avoid duplication. Approvals and ethical issues.
  4. Monitoring research progress.
  5. Evaluation of dissertation.
  6. Publication if any, out of dissertation research.
  7. Maintenance of database of all dissertations under various categories with search option.
  8. With holding of university final year results in case of disapproval of PG dissertation.
  9. Managing and monitoring all the above aspects throughout the country maybe a herculean task.
  10. An application to ease the process and improve the quality of research is essential.
      
## APPROACH:

 Our idea is to build a website under Ministry of Ayush which would help students to work on their respective papers,where the students would choose their paper topic and under the supervision of  the respected assigend mentors about their project and continue the workflow smoothly everything to done in the website which would linked to their college credentials.

 
 ## ABOUT THE DISSERTATION MANAGEMENT SYSTEM
  The university dissertation or thesis project described here provides students with a remarkable opportunity for autonomy and self-driven learning. Within a two-year timeframe, students select their own research    question or proposition, accompanied by the support of a mentor for guidance and addressing queries along the way. This project holds significant weight in the assessment process, contributing to their final        grades, and serves as a test of their independent research skills developed during their university years. Although some guidance is available from tutors, the emphasis lies on the students' ability to conduct      original research and produce a substantial academic work. It's a formidable undertaking, requiring months of preparation and dedication. The key advice is to select a subject of genuine interest, making the        arduous journey more rewarding.


## CICD
  ## CONTINUOUS INTEGRATION
  ```mermaid
graph LR;
    A[PLAN]-->B[CODE];
    B-->C[BUILD];
    C-->D[TEST];
    D-->B;
```

  ## CONTINUOUS DEPLOYMENT
  ```mermaid
graph LR;
    A[TEST]-->B[RELEASE];
    B-->C[DEPLOY];
    C-->D[OPERATE];
    C-->A;
```

## WEBSITE SNAPSHOTS
![sss1](https://github.com/PD-NET/Devnew/assets/141448013/e21d57c1-6935-4fb2-85e8-1fcfe12df0a6)

![sss2](https://github.com/PD-NET/Devnew/assets/141448013/7effe361-b355-4113-a380-8b3d1b5f199b)

 ## FLOWCHART 

 ```mermaid
  graph TD;
      A[vscode]-->B{Commit changes};
      B-->|Yes| C[Command Prompt];
     C-->D{Trigger Build};
     D-->|Yes| E[Run 3 repos];
    E--> F[Build];
  F-->|Yes| G[Window pops up];
G--> H{Notify};
  H-->|Yes| I[CodeQL];
I-->|If no errors| J[Passed];
I-->|Errors detected| K[Display bugs and erros];
J-->L[aws];
L-->|Yes| M[Output displayed];
K--> A;
```
