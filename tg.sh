!/bin/bash
now=$(date)
to=$1
subject=$2
body=$3
tgpath=/home/kae/Documents/workspace/tg
LOGFILE="/home/kae/tg.log"
cd ${tgpath}
${tgpath}/bin/telegram-cli -k ${tgpath}/server.pub -W <<AAA
msg $1 $2
quit
AAA
echo "command: ${tgpath}/bin/telegram-cli -k ${tgpath}/server.pub -W" >> ${LOGFILE}
echo "$now Recipient=$to Message=$subject" >> ${LOGFILE}
echo "Finished" >> ${LOGFILE}