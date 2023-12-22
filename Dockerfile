FROM node:14

WORKDIR /app

COPY . /app

RUN npm install http-server -g

EXPOSE 5500

CMD ["http-server", "-p", "5500"]
