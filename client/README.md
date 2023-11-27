# PD


##  PROBLEM STATEMENT 
 **PG DISSERTATION MANAGEMENT SYSTEM DESCRIPTION**
 -PROBLEM STATEMENT
  PG dissertation is the partial requirement for the fulfillment of Pg degree. During 1st year of post graduation, student select PG dissertation topic and carry out research under supervision of PG guide and     
  submit dissertation during final year of evaluation. The following are the major steps of the dissertation: Selection of topics: 1. As per the thrust ideas of research of a particular department. 2. Maintaining 
  student guide ratio. 3. To avoid duplication. Approvals and ethical issues. Monitoring research progress. Evaluation of dissertation. Publication if any, out of dissertation research. Maintenance of database of 
  all dissertations under various categories with search option. With holding of university final year results in case of disapproval of PG dissertation. Managing and monitoring all the above aspects throughout the 
  country maybe a herculean task. An application to ease the process and improve the quality of research is essential.
-IDEA
 OUR IDEA IS TO BUILD A WEBSITE UNDER THE MEDICAL AYUSH ORGANIAZATION WHICH WOULD HELP STUDENTS TO WORK ON THEIR PAPER WORK WHERE THE STUDENTS CHOOSE THEIR PAPER TOPIC AND MENTORS ABOUT THEIR PROJECT AND CONTINUE 
 THE WORK FLOW SMOOTHLY EVERYTHING TO DONE IN THE WEBSITE WHICH WOULD LINKED TO THEIR COLLEGE ID'S AND IT WOULD LIKE SIMILAR TO GITHUB VERSION CONTROL .

 ## CICD PIPELINE
 - **FLOWCHART**
   https://lucid.app/lucidchart/6281b4e7-12d7-42a3-9ce2-b2aa875c7ce0/edit?invitationId=inv_14333978-e247-4df0-be74-979615fd9b7f&page=0_0#

  The university dissertation or thesis project described here provides students with a remarkable opportunity for autonomy and self-driven learning. Within a two-year timeframe, students select their own research    question or proposition, accompanied by the support of a mentor for guidance and addressing queries along the way. This project holds significant weight in the assessment process, contributing to their final        grades, and serves as a test of their independent research skills developed during their university years. Although some guidance is available from tutors, the emphasis lies on the students' ability to conduct      original research and produce a substantial academic work. It's a formidable undertaking, requiring months of preparation and dedication. The key advice is to select a subject of genuine interest, making the        arduous journey more rewarding
   FURTHER CICD PIPELINE EXPLAINED.
 ### SONARCLOUD 
 ![WhatsApp Image 2023-10-19 at 10 45 06_1e68c564](https://github.com/Gaurang-dsu/PD/assets/141448013/016c7091-03e3-4e3c-a113-1ead6db3494f)
 ### VERSEL
 ![WhatsApp Image 2023-10-19 at 10 45 32_8d4f061e](https://github.com/Gaurang-dsu/PD/assets/141448013/f316cdd2-3955-4234-ae20-793fdbb4d464)

 ## Flowchart
 ```mermaid
  graph TD;
      A[VS Code]-->B{Commit changes};
      B-->|Yes| C[Command Prompt];
     C-->D{Trigger Build};
     D-->|Yes| E[Run 3 repos];
    E--> F[Build];
  F-->|Yes| G[Window pops up];
G--> H{Notify};
  H-->|Yes| I[Sonar cloud];
I-->|If no errors| J[Passed];
I-->|Errors detected| K[Display bugs and erros];
J-->L[Terraform];
L-->|Yes| M[Output displayed];
K--> A;
```
