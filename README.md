# My Chat-App(PHP/Apache AND HTML + DOCKER )

This repository contains a  **My Chat-App(PHP/Apache AND HTML + DOCKER )** an application system that allows messaging between two users through ports .  

It can be implemented on any devise i.e phones , laptops and pc's .

---


## File structure
```text
CHAT-APP/
├── docker-compose.yml
├── nginx.conf
├── app/           # Your PHP app code
│     ├── db.php
│     ├── index.php
│     └── logos.png
│     └── get_messages.php
│     └── send_messages.php
└── init.sql       
└── dockerfile
```
---

## How to run 
- install docker on device
- clone the repo to individual device and run
- docker-compose up --build
- open http://localhost:8080 and http://localhost:8081
- after usage u can stop container and run ..
- docker-compose down -v

- to delete container containing data
- write message between both ports
- application runs identically on any system that supports Docker
<img width="1224" height="866" alt="full" src="https://github.com/user-attachments/assets/8f087691-b71f-4e68-85d9-b06f8d811475" />


