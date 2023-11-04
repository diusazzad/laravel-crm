-- Insert data into the leads table
INSERT INTO leads (name, account, revenue, stage, owner, probability, trend, files, type, lead_source)
VALUES ('Lead 1', 'Account 1', 10000, 'Qualified', 'John Doe', 0.75, 'Up', JSON_ARRAY('file1.pdf', 'file2.jpg'), 'B2B', 'Website');
INSERT INTO leads (name, account, revenue, stage, owner, probability, trend, files, type, lead_source)
VALUES ('Lead 2', 'Account 2', 20000, 'Qualified', 'Jane Doe', 0.5, 'Down', JSON_ARRAY('file3.txt', 'file4.docx'), 'B2C', 'Email');
INSERT INTO leads (name, account, revenue, stage, owner, probability, trend, files, type, lead_source)
VALUES ('Lead 3', 'Account 3', 30000, 'Closed Won', 'Peter Parker', 1, 'Up', JSON_ARRAY('file5.pdf', 'file6.jpg'), 'SaaS', 'Cold Call');
INSERT INTO leads (name, account, revenue, stage, owner, probability, trend, files, type, lead_source)
VALUES ('Lead 4', 'Account 4', 40000, 'Closed Lost', 'Mary Jane', 0, 'Down', JSON_ARRAY('file7.txt', 'file8.docx'), 'E-commerce', 'Webinar');
INSERT INTO leads (name, account, revenue, stage, owner, probability, trend, files, type, lead_source)
VALUES ('Lead 5', 'Account 5', 50000, 'New', 'Susan Storm', 0.25, 'Up', JSON_ARRAY('file9.pdf', 'file10.jpg'), 'Education', 'Social Media');
